    
    /**
     * @file NRE_DefaultAllocator.tpp
     * @brief Implementation of Memory's API's Object : DefaultAllocator
     * @author Louis ABEL
     * @date 24/03/2020
     * @copyright CC-BY-NC-SA
     */
    
    namespace NRE {
        namespace Memory {
            
            template <class T>
            template <class K>
            inline DefaultAllocator<T>::DefaultAllocator(DefaultAllocator<K> const&) {
            }
            
            template <class T>
            inline typename DefaultAllocator<T>::Pointer DefaultAllocator<T>::allocate(SizeType n) {
                return static_cast <T*> (::operator new(n * sizeof(ValueType)));
            }
            
            template <class T>
            inline void DefaultAllocator<T>::deallocate(Pointer& p) {
                ::operator delete(p);
                p = nullptr;
            }
            
            template <class T>
            inline void DefaultAllocator<T>::deallocate(Pointer& p, SizeType n) {
                ::operator delete(p, n);
                p = nullptr;
            }
            
            template <class T>
            template <class K, class ... Args>
            inline K* DefaultAllocator<T>::construct(K* p, Args && ... args) {
                assert(p != nullptr);
                return static_cast <K*> (::new(static_cast <void*> (p)) K(std::forward<Args>(args)...));
            }
            
            template <class T>
            template <class K>
            inline void DefaultAllocator<T>::destroy(K* p) {
                p->~K();
            }
            
        }
    }