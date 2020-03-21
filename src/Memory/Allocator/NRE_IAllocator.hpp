    
    /**
     * @file NRE_IAllocator.hpp
     * @brief Declaration of Memory's API's Object : IAllocator
     * @author Louis ABEL
     * @date 14/03/2020
     * @copyright CC-BY-NC-SA
     */
    
    #pragma once
    
    #include <type_traits>
    #include <utility>
    #include "Utility/Interfaces/NRE_StaticInterface.hpp"
    
    /**
     * @namespace NRE
     * @brief The NearlyRealEngine's global namespace
     */
    namespace NRE {
        /**
         * @namespace Memory
         * @brief Memory's API
         */
        namespace Memory {
            
            /**
             *  @class IAllocator
             *  @brief Describe an allocator object
             */
            template <class T>
            class IAllocator : public Utility::StaticInterface<T, IAllocator> {
                static_assert(!std::is_void_v<T>);    /**< No allocator for void object */
                
                public: // Methods
                    /**
                     * @return the maximum allocation size
                     */
                    std::size_t getMaxSize() const {
                        return this->impl().getMaxSize();
                    }
                    /**
                     * Retrieve the address of an object
                     * @param object the object to return his address
                     * @return       the object's address
                     */
                    T* getAddress(T& object) const {
                        return this->impl().getAddress(object);
                    }
                    /**
                     * Retrieve the address of an object
                     * @param object the object to return his address
                     * @return       the object's address
                     */
                    const T* getAddress(T const & object) const {
                        return this->impl().getAddress(object);
                    }
                    /**
                     * Allocate n * sizeof(T) bytes
                     * @param n the number of object
                     * @return  a pointer on the first allocated bytes
                     */
                    [[nodiscard]] T* allocate(std::size_t n) {
                        return this->impl().allocate(n);
                    }
                    /**
                     * Deallocate a pointer given by an allocate call
                     * @param p the pointer on the first bytes allocated
                     */
                    void deallocate(T*& p) {
                        this->impl().deallocate(p);
                    }
                    /**
                     * Deallocate a pointer given by an allocate call
                     * @param p the pointer on the first bytes allocated
                     * @param n the number of object allocated
                     */
                    void deallocate(T*& p, std::size_t n) {
                        this->impl().deallocate(p, n);
                    }
                    /**
                     * Construct a K-type object in the given pointer with given arguments
                     * @param p    the pointer to construct the object
                     * @param args the construction arguments
                     */
                    template <class K, class ... Args>
                    K* construct(K* p, Args && ... args) {
                        return this->impl().construct(p, std::forward<Args>(args)...);
                    }
                    /**
                     * Destroy an given to the given pointer
                     * @param p the object address
                     */
                    template <class K>
                    void destroy(K* p) {
                        this->impl().destroy(p);
                    }
                    /**
                     * Equality test between this and o
                     * @param o the other allocator to compare with this
                     * @return  the test result
                     */
                    template <class K>
                    bool operator ==(IAllocator<K> const& o) const {
                        return this->impl().equal(o);
                    }
                    /**
                     * Inequality test between this and o
                     * @param o the other allocator to compare with this
                     * @return  the test result
                     */
                    template <class K>
                    bool operator !=(IAllocator<K> const& o) const {
                        return  !(*this == o);
                    }
            };
        }
    }